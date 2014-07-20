package com.example.bluetoothdemo;

import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.util.Set;
import java.util.UUID;

import android.support.v7.app.ActionBarActivity;
import android.support.v7.app.ActionBar;
import android.support.v4.app.Fragment;
import android.bluetooth.BluetoothAdapter;
import android.bluetooth.BluetoothDevice;
import android.bluetooth.BluetoothSocket;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.os.AsyncTask;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.os.Build;

public class MainActivity extends ActionBarActivity {

	final BluetoothAdapter mBluetoothAdapter= BluetoothAdapter.getDefaultAdapter();
	final String mTargetDeviceName = "Bluetooth_V3";
	BluetoothDevice mTargetDevice = null;
	BluetoothSocket mBluetoothSocket = null;
	OutputStream mOSM = null;
	InputStream mISM = null;
	
	private Button mBtn;
	private EditText mEdt;
	private TextView mTv;
	private Handler mHandler;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        if (savedInstanceState == null) {
            getSupportFragmentManager().beginTransaction()
                    .add(R.id.container, new PlaceholderFragment())
                    .commit();
        }
        mBtn = (Button)findViewById(R.id.btn);
        mBtn.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View v) {
		        if(null != mBluetoothSocket)
		        {
		        	writeToBluetooth(mEdt.getText().toString().getBytes());
		        }	
			}
		});
        mEdt = (EditText)findViewById(R.id.edt);
        mTv = (TextView)findViewById(R.id.tV);
        mHandler = new Handler()
        {
        	@Override
        	public void handleMessage(Message msg)
        	{
        		mTv.setText((String)msg.obj);
        	}
        };
        initBT();
        Thread t = new Thread(new Runnable() {
			
			@Override
			public void run() {
				byte[] buffer = new byte[256];
				try {
					while(true)
					{
						int byteNum = mISM.read(buffer);
						try {
							Thread.sleep(50);
						} catch (InterruptedException e) {
							// TODO Auto-generated catch block
							e.printStackTrace();
						}
						if(0 != byteNum)
						{
							Message msg = mHandler.obtainMessage();
							msg.obj = new String(buffer);
							mHandler.sendMessage(msg);
						}
					}
					
				} catch (IOException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
				
			}
		});
        t.start();
        	
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();
        if (id == R.id.action_settings) {
            return true;
        }
        return super.onOptionsItemSelected(item);
    }

    /**
     * A placeholder fragment containing a simple view.
     */
    public static class PlaceholderFragment extends Fragment {

        public PlaceholderFragment() {
        }

        @Override
        public View onCreateView(LayoutInflater inflater, ViewGroup container,
                Bundle savedInstanceState) {
            View rootView = inflater.inflate(R.layout.fragment_main, container, false);
            return rootView;
        }
    }
    
	private void initBT() {

		mBluetoothAdapter.enable();

		BluetoothDevice device = findBoundDevice();
		if (null != device) {
			mTargetDevice = device;
			createSocket();
		} else {
			mBluetoothAdapter.startDiscovery();
		}

		BroadcastReceiver mReceiver = new BroadcastReceiver() {

			public void onReceive(Context context, Intent intent) {

				String action = intent.getAction();
				// ’“µΩ…Ë±∏
				if (BluetoothDevice.ACTION_FOUND.equals(action)) {
					BluetoothDevice device = intent
							.getParcelableExtra(BluetoothDevice.EXTRA_DEVICE);
					if (device.getBondState() != BluetoothDevice.BOND_BONDED) {
						Log.v("BT",
								"find device:" + device.getName()
										+ device.getAddress());
						if (device.getName().equals(mTargetDeviceName)) {
							mTargetDevice = intent
									.getParcelableExtra(BluetoothDevice.EXTRA_DEVICE);
							createSocket();
						}

					}
				}
			}
		};

		IntentFilter filter = new IntentFilter(BluetoothDevice.ACTION_FOUND);
		registerReceiver(mReceiver, filter);
		filter = new IntentFilter(BluetoothAdapter.ACTION_DISCOVERY_FINISHED);
		registerReceiver(mReceiver, filter);
	}
    
    private BluetoothDevice findBoundDevice()
    {
    	Set<BluetoothDevice> pairedDevices = mBluetoothAdapter.getBondedDevices();
    	// If there are paired devices
    	if (pairedDevices.size() > 0) {
    	    // Loop through paired devices
    	    for (BluetoothDevice device : pairedDevices) {
    	        // Add the name and address to an array adapter to show in a ListView
    	        //mArrayAdapter.add(device.getName() + "\n" + device.getAddress());
    	    	if(device.getName().equals(mTargetDeviceName))
    	    	{
    	    		return device;
    	    	}
    	    }
    	}
    	return null;
    }
    
	private void createSocket() {
		// Get a BluetoothSocket to connect with the given BluetoothDevice
		try {
			// MY_UUID is the app's UUID string, also used by the server code
			UUID uuid = UUID.fromString("00001101-0000-1000-8000-00805F9B34FB");
			mBluetoothSocket = mTargetDevice
					.createRfcommSocketToServiceRecord(uuid);

			try {
				// Connect the device through the socket. This will block
				// until it succeeds or throws an exception
				mBluetoothSocket.connect();
				mOSM = mBluetoothSocket.getOutputStream();
				mISM = mBluetoothSocket.getInputStream();
			} catch (IOException connectException) {
				// Unable to connect; close the socket and get out
					mBluetoothAdapter.cancelDiscovery();
			}
		} catch (IOException e) 
		{
		}
	}
	
	private void writeToBluetooth(byte[] bytes)
	{
		try {
			mOSM.write(bytes);
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
	private void readfromBluetooth(byte[] bytes)
	{
		if(null != bytes)
		{
			try{
				mISM.read(bytes);
			}	
			catch(IOException e)
			{
				e.printStackTrace();
			}
		}

	}

}
