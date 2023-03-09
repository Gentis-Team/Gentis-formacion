<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Líneas de idioma de validación
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | la clase del validador. Algunas de estas reglas tienen varias versiones
    | tal y como regula el tamaño. No dude en modificar cada uno de estos mensajes aquí.
    |
    */

    'accepted'             => 'El campo :attribute debe aceptarse.',
    'active_url'           => 'El campo :attribute no es una dirección web válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números y puntos.',
    'alpha_num'            => 'El campo :attribute sólo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date',
    'between'              => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file'    => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe estar entre :min y :max characters.',
        'array'   => 'El campo :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo :attribute y su confirmación no coinciden.',
    'date'                 => 'El campo :attribute no es una fecha válida.',
    'date_format'          => 'El campo :attribute no concuerda con el formato :formato.',
    'different'            => 'Los campos :attribute y :other deben ser differentes.',
    'digits'               => 'El campo :attribute debe contener :digitos dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute contiene tamaños incorrectos.',
    'distinct'             => 'El campo :attribute está duplicado.',
    'email'                => 'El campo :attribute debe ser un e-mail válido.',
    'exists'               => 'El campo marcado :attribute no es válido.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo marcado :attribute no es válido.',
    'in_array'             => 'El campo :attribute no existe dentro de :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe ser una cadena JSON válida.',
    'max'                  => [
        'numeric' => 'El campo :attribute no puede ser mayor que :max.',
        'file'    => 'El campo :attribute no puede ser mayor que :max kilobytes.',
        'string'  => 'El campo :attribute no puede ser mayor que :max characters.',
        'array'   => 'El campo :attribute no puede tener más de :max elementos.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo tipo: :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo tipo: :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe ser como mínimo :min.',
        'file'    => 'El campo :attribute debe ser de al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe ser de al menos :min caracteres.',
        'array'   => 'El campo :attribute debe tener al menos :min elements',
    ],
    'not_in'               => 'El campo marcado :attribute no es válido.',
    'numeric'              => 'El campo :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe existir.',
    'regex'                => 'El formato del campo :attribute no es válido.',
    'required'             => 'El campo :attribute es obligatorio',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es obligatorio a menos que :other está entre los valores :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando hay :values.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando hay :values.',
    'required_without'     => 'El campo :attribute es obligatorio cuando no hay :values.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando no hay ningún valor de los siguientes: :values.',
    'same'                 => 'El campo :attribute y el campo :other deben ser iguales',
    'size'                 => [
        'numeric' => 'El campo :attribute debe tener el tamaño: :size.',
        'file'    => 'El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe ser :size characters.',
        'array'   => 'El campo :attribute debe contener :size elements.',
    ],
    'string'               => 'El campo :attribute debe ser una cadena.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria válida.',
    'unique'               => 'El campo :attribute ya está registrado y no se puede repetir.',
    'uploaded'             => 'No se pudo añadir el campo :attribute.',
    'url'                  => 'El campo :attribute no es una dirección web válida.',

        /*
    |--------------------------------------------------------------------------
    | Línies d'idioma de validació personalitzada
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar los marcadores de posición de atributos
    | con algo más fácil de leer, como la dirección de correo electrónico
    | de "correo electrónico". Esto simplemente nos ayuda a hacer los mensajes algo más limpios.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

        /*
    |--------------------------------------------------------------------------
    | Atributos de validación personalizados
    |--------------------------------------------------------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar los marcadores de posición de atributos
    | con algo más fácil de leer, como la dirección de correo electrónico
    | de "correo electrónico". Esto simplemente nos ayuda a hacer los mensajes algo más limpios.
    |
    */

    'attributes' => [        
        'password' => 'contrasenya',

        'email' => 'correo electrónico',
        'name' => 'nombre',
        'surname' => 'apellido',
    
        'adress' => 'dirección',
        'phone' => 'teléfono',

        'code' => 'código',
        'name' => 'cursos',
        'duration_theory' => 'duración del curso',
        'duration_practice' => 'duración de las prácticas',
        'start_date' => 'inicio del curso',
        'start_time' => 'horario de inici',
        'end_time' => 'horario de finalización',
        'description' => 'descripción del curso',
        'modality' => 'modalidad',
        'fitxa_curs' => 'ficha del curso',

        'location' => 'localización',],

];