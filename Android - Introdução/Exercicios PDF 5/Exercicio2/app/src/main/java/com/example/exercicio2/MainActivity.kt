package com.example.exercicio2

import android.content.Intent
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.example.exercicio2.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {

    private val binding by lazy{
        ActivityMainBinding.inflate(layoutInflater);
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState);
        setContentView(binding.root);

        binding.botaoLogin.setOnClickListener{

            val userEmail : String = binding.textEmail.text.toString();
            val userSenha : String = binding.textSenha.text.toString();


            if(userEmail == "joao@teste.pt" && userSenha == "123456")
            {
                intent = Intent(this,SucessActivity::class.java);
                startActivity(intent);
            }
            else
            {
                intent = Intent(this,ErrorActivity::class.java);
                startActivity(intent);
            }



        }
    }
}