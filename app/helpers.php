<?php
if (! function_exists('current_type')) {
    function current_type()
    {
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) return "BIENVENIDO";
        if(is_array($usuario)){
            return "informatico";  
        }else{
            $clase = get_class($usuario);
            switch ($clase) {
                case 'App\Models\Estudiante':
                    return "Estudiante";
                    break;
                case 'App\Models\Docente':
                    return "Docente";
                    break;
               case 'App\Models\Pe':
                    return "Coordiandor";
                    break;
            }
        }
        return "SIN TIPO";
    }
}
if (! function_exists('current_name')) {
    function current_name()
    {
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) return "";
        if(is_array($usuario)){
            return "informatico";  
        }else{
            $clase = get_class($usuario);
            $usuario = $usuario->fresh(); 

            switch ($clase) {
                case 'App\Models\Estudiante':
                case 'App\Models\Docente':
                    return $usuario->nombre;
                    break;
               case 'App\Models\Pe':
                    return $usuario->coordinador;
                    break;
            }
        }
        return "SIN NOMBRE";
    }
}
if (! function_exists('current_id')) {
    function current_id()
    {
        $usuario  = \Session::get('usuario' );
        if (is_null($usuario)) return "";
        if(is_array($usuario)){
            return 0;  
        }else{
            $clase = get_class($usuario);
            $usuario = $usuario->fresh(); 
            return $usuario->id;
        }
        return "SIN ID";
    }
}