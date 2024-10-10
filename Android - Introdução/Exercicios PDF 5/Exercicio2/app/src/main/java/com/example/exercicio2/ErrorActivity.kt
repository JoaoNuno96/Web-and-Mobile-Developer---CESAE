package com.example.exercicio2

import android.content.Intent
import android.os.Bundle
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.exercicio2.databinding.ActivityErrorBinding

class ErrorActivity : AppCompatActivity() {

    private val binding by lazy{
        ActivityErrorBinding.inflate(layoutInflater);
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState);
        setContentView(binding.root);

        Toast.makeText(applicationContext,"Login ou senha errados",Toast.LENGTH_SHORT).show();

        binding.botaoVoltar.setOnClickListener{
            val intent = Intent(this,MainActivity::class.java);
            startActivity(intent);
        }
    }
}