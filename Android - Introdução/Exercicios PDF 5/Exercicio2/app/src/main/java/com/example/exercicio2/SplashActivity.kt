package com.example.exercicio2

import android.content.Intent
import android.os.Bundle
import android.os.Looper
import androidx.appcompat.app.AppCompatActivity
import com.example.exercicio2.databinding.ActivitySplashBinding

class SplashActivity : AppCompatActivity() {

    private val binding by lazy{
        ActivitySplashBinding.inflate(layoutInflater);
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(binding.root)

      android.os.Handler(Looper.getMainLooper()).postDelayed({
          val intent = Intent(this,MainActivity::class.java);
          startActivity(intent);
          finish();
      },3000)
    }
}