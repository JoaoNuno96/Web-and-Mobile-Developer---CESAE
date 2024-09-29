package com.example.exercicio1

import android.content.Intent
import android.os.Bundle
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.exercicio1.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {

    private val binding by lazy{
        ActivityMainBinding.inflate(layoutInflater);
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(binding.root);

        binding.botaoToast.setOnClickListener{
            Toast.makeText(applicationContext,"Este botão foi clicado",Toast.LENGTH_SHORT).show();
        }

        binding.botaoNovaView.setOnClickListener {
            val intent = Intent(this,NovaActivity::class.java);

            startActivity(intent);
        }

    }
}