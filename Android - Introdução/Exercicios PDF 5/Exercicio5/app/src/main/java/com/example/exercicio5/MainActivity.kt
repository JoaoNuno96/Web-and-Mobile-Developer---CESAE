package com.example.exercicio5

import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import com.example.exercicio5.databinding.ActivityMainBinding

class MainActivity : AppCompatActivity() {

    private val binding by lazy{
        ActivityMainBinding.inflate(layoutInflater);
    }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState);
        setContentView(binding.root);

        binding.button.setOnClickListener{

            val numeroUser : Double = binding.textUserInput.text.toString().toDouble();

            var numeroHorasPorDia : Double = 24.0;
            var numeroHorasPorSemana : Double = 24.0 * 7.0;

            //Numero Semanas
            var numeroSemanas : Double = Math.floor(numeroUser / numeroHorasPorSemana).toString().toDouble();

            //Numero Dias
            var numeroDiasResto : Double = numeroUser % numeroHorasPorSemana;
            var numeroDias : Double = Math.floor(numeroDiasResto / numeroHorasPorDia);

            //Numero horas
            var restoHoras : Double = numeroDiasResto % numeroHorasPorDia;


            binding.semanas.text = numeroSemanas.toString();
            binding.dias.text = numeroDias.toString();
            binding.horas.text = restoHoras.toString();



        }
    }
}