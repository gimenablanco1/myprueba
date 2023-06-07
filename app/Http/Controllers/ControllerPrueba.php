<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrueba extends Controller
{
    public function index(){
        //echo "Hola Mundo";
        /* Introducir dos numeros distintos y mostrar el numero mayor
        */
        $numero1 =45;
        $numero2 =85;
        if($numero1 > $numero2){
            $res=$numero1;
        }else{
            $res=$numero2;
        }

        return view('ejemplo1', compact('res'));
    }

    public function ejemplo2(){
        //echo "eeeeeeeeeeeeee";
        return view('ejemplo2');
    }

    public function ejemplo2_res(Request $request){
        //echo "eeeeeeeeeeeeee";
        $n1=$request->post('valor1');
        $n2=$request->post('valor2');
        if($n1>$n2){
            $res=$n1;
        }else{
            $res=$n2;
        }
        echo json_encode(array('0'=>$res));
    }

    public function ejemplo3(){
        //echo "eeeeeeeeeeeeee";
        return view('ejemplo3');
    }

    public function ejemplo3_res(Request $request){
        
       $n1=$request->post('valor1');
        $n2=$request->post('valor2');
        $n3=$request->post('valor3');
        if($n1>$n2){
            $mayor1=$n1;
        }else{
            $mayor1=$n2;
        }

        if($n3>$mayor1){
            $res=$n3;
        }else{
            $res=$mayor1;
        }
        
        echo json_encode(array('0'=>$res));
    }

    public function ejemplo4(){
        //echo "eeeeeeeeeeeeee";
        return view('ejemplo4');
    }

    public function ejemplo4_res(Request $request){
        //echo "eeeeeeeeeeeeee";
        $n1=$request->post('valor1');
        $res="FUERA DE RANGO";
        if($n1 == 0){
            $res="CERO";
        }else if($n1 == 1){
            $res="UNO";
        }else if($n1 == 2){
            $res="DOS";
        }else if($n1 == 3){
            $res="TRES";
        }else if($n1 == 4){
            $res="CUATRO";
        }else if($n1 == 5){
            $res="CINCO";
        }else if($n1 == 6){
            $res="SEIS";
        }else if($n1 == 7){
            $res="SIETE";
        }else if($n1 == 8){
            $res="OCHO";
        }else if($n1 == 9){
            $res="NUEVE";
        }
        echo json_encode(array('0'=>$res));
    }
    
}
