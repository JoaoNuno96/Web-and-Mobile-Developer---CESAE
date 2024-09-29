package com.example.exercicio4

import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.example.exercicio4.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {

    private val binding by lazy{
        ActivityMainBinding.inflate(layoutInflater);
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState);
        setContentView(binding.root);

        binding.botaoClicar.setOnClickListener{

            val number : Float = binding.plainTextUserNumber.text.toString().toFloat();
            var resposta : String;

            if(number % 2 == 0.0f)
            {
                resposta = "Numero é par, e não é primo";
            }
            else
            {
                if(number / number == 1.0f && number / 1 == number)
                {
                    if(number % 3 != 0.0f || number % 5 != 0.0f || number % 7 != 0.0f || number % 9 != 0.0f)
                    {
                        resposta = "Numero não é par, nem é primo";
                    }
                    else
                    {
                        resposta = "Numero não é par, mas é primo";
                    }
                }
                else
                {
                    resposta = "numeor não legivel";
                }
            }

            binding.parImpar.text = resposta;
        }
    }
}