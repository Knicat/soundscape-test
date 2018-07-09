<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/* @var $app \Silex\Application */

$app->get('/', function () use ($app) {

    return $app['twig']->render('index.html.twig', array());
})->bind('homepage');

$videos = [
    ['video_id' => 'ZLls1Wn6070', 'nombre' => 'Video 1'],
    ['video_id' => 'zwZkhCP9QRY', 'nombre' => 'Video 2'],
    ['video_id' => 'kE3DfbC-Vyk', 'nombre' => 'Video 3'],
    ['video_id' => 'VqP9wM_qiUQ', 'nombre' => 'Video 4'],
    ['video_id' => '39wCCACuxAY', 'nombre' => 'Video 5'],
    ['video_id' => 'CNErMIsQAOQ', 'nombre' => 'Video 6'],
    ['video_id' => '-MXpuRwVGgw', 'nombre' => 'Video 7'],
    ['video_id' => 'W3Ormr6UpeA', 'nombre' => 'Video 8'],
    ['video_id' => 'TYWq4lX0cR0', 'nombre' => 'Video 9'],
    ['video_id' => '6VChOpJt6AY', 'nombre' => 'Video 10']
];

$formularios = [
    function(&$form) {
        $form->add('agrado_sonoro', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
            'choices' => range(1,11),
            'expanded' => true,
            'multiple' => false,
            'choice_label' => false,
            'required' => true,
            'constraints' => array(
                new \Symfony\Component\Validator\Constraints\NotBlank()
            )
        ))
            ->add('animacion', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('intensidad_sonora_global', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('intensidad_sonora_de_las_motocicletas', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('intensidad_sonora_de_los_vehiculos_livianos', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('intensidad_sonora_de_los_vehiculos_pesados', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('tiempo_de_presencia_de_los_vehiculos', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('tiempo_de_presencia_de_las_voces', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('tiempo_de_presencia_de_los_pasos', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('tiempo_de_presencia_de_los_pajaros', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('agrado_visual', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('familiaridad_del_sonido', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                'choices' => range(1,11),
                'expanded' => true,
                'multiple' => false,
                'choice_label' => false,
                'required' => true,
                'constraints' => array(
                    new \Symfony\Component\Validator\Constraints\NotBlank()
                )
            ))
            ->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, array(
                'attr' => array('class'=>'btn btn-success'),
                'label' => 'Siguiente'
            ))
            ->add('volver', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, array(
                'attr' => array('class'=>'btn btn-primary'),
                'label' => 'Volver'
            ));
    },
];


//  Calibración
$app->get('/calibracion/1', function() use ($app, $videos) {

    $app['session']->clear();

    $order = range(0, count($videos)-1);
    shuffle($order);

    $app['session']->set('order', $order);
    $app['session']->set('startTime', new \DateTime());

    return $app['twig']->render('calibracion/1.html.twig');

})->bind('calibracion_1');

$app->get('/calibracion/2', function() use ($app) {

    return $app['twig']->render('calibracion/2.html.twig');

})->bind('calibracion_2');

$app->get('/calibracion/3', function(Request $request) use ($app) {

    $vol = round($request->get('vol'));
    if ($vol)
        $app['session']->set('volumen_musica', $vol);

    return $app['twig']->render('calibracion/3.html.twig');

})->bind('calibracion_3');


$app->get('/video/{index}', function(Request $request) use ($app, $videos) {
    $vol = round($request->get('vol'));
    if ($vol)
        $app['session']->set('calibracion_video', $vol);

    $volumen_video = $app['session']->get('calibracion_video');

    $order = $app['session']->get('order');
    $video = $videos[$order[$request->get('index')]];

    return $app['twig']->render('video.html.twig', array(
        'volumen' => $volumen_video,
        'qs' => $request->getQueryString(),
        'video' => $video,
        'index' => $request->get('index')
    ));
})->bind('video');

$app->match('/form/{index}', function(Request $request) use ($app, $formularios, $videos) {

    $p = array();
    parse_str($request->getQueryString(), $p);
    $formBuilder = $app['form.factory']->createBuilder(\Symfony\Component\Form\Extension\Core\Type\FormType::class, $p);
    $formularios[0]($formBuilder);
    $form = $formBuilder->getForm();

    /* @var $form \Symfony\Component\Form\Form */

    $form->handleRequest($request);

    if ($form->get('volver')->isClicked()) {
        return $app->redirect($app['url_generator']->generate('video', ['index'=>$request->get('index')]).'?'.http_build_query($form->getData()));
    }


    if ($form->isValid()) {
        $app['session']->set('formulario_' . $request->get('index'), $form->getData());

        $nextIndex = $request->get('index')+1;
        if (isset($videos[$nextIndex])) {
            return $app->redirect($app['url_generator']->generate('video',['index'=>$nextIndex]));
        } else {
            $startTime = $app['session']->get('startTime');
            $endTime = new \DateTime();
            /* @var $startTime \DateTime */
            /* @var $endTime \DateTime */
            $startTimeSeconds = $startTime->format('U');
            $endTimeSeconds = $endTime->format('U');
            $diff = $endTimeSeconds - $startTimeSeconds;

            $db = $app['db'];
            /* @var $db \Doctrine\DBAL\Connection */
            $db->insert('persona', [
                'edad' => 0,
                'educacion_musical' => 0,
                'vecindario' => 0,
                'tiempo' => $diff,
                'vol_1' => $app['session']->get('volumen_musica'),
                'vol_2' => $app['session']->get('calibracion_video')
            ]);

            $personaId = $db->lastInsertId();
            $app['session']->set('persona_id', $personaId);
            $order = $app['session']->get('order');

            for ($i = 0; $i < count($videos); $i++){
                $data = $app['session']->get('formulario_' . $i);
                $db->insert('respuestas', [
                    'participante' => $personaId,
                    'video' => $order[$i],
                    'agrado_sonoro' => $data['agrado_sonoro'],
                    'animacion' => $data['animacion'],
                    'intensidad_sonora_global' => $data['intensidad_sonora_global'],
                    'intensidad_sonora_de_las_motocicletas' => $data['intensidad_sonora_de_las_motocicletas'],
                    'intensidad_sonora_de_los_vehiculos_livianos' => $data['intensidad_sonora_de_los_vehiculos_livianos'],
                    'intensidad_sonora_de_los_vehiculos_pesados' => $data['intensidad_sonora_de_los_vehiculos_pesados'],
                    'tiempo_de_presencia_de_los_vehiculos' => $data['tiempo_de_presencia_de_los_vehiculos'],
                    'tiempo_de_presencia_de_las_voces' => $data['tiempo_de_presencia_de_las_voces'],
                    'tiempo_de_presencia_de_los_pasos' => $data['tiempo_de_presencia_de_los_pasos'],
                    'tiempo_de_presencia_de_los_pajaros' => $data['tiempo_de_presencia_de_los_pajaros'],
                    'agrado_visual' => $data['agrado_visual'],
                    'familiaridad_del_sonido' => $data['familiaridad_del_sonido']
                ]);
            }

            return $app->redirect($app['url_generator']->generate('datos_personales'));

        }
    }

    return $app['twig']->render('form.html.twig', array(
        'form' => $form->createView(),
        'url' => $app['url_generator']->generate('video',['index'=>$request->get('index')])
    ));
})->method('get|post')->bind('form');

$app->get('/datos-personales', function(Request $request) use ($app, $videos) {






    $formBuilder = $app['form.factory']->createBuilder(\Symfony\Component\Form\Extension\Core\Type\FormType::class);



    /* @var $formBuilder \Symfony\Component\Form\FormBuilder */
    $formBuilder
        ->add('nombre', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
            'label' => 'Nombre',
            'required' => true
        ])
        ->add('apellido', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
            'label' => 'Apellido',
            'required' => true
        ])
        ->add('edad', \Symfony\Component\Form\Extension\Core\Type\NumberType::class, [
            'label' => 'Edad',
            'required' => true
        ])
        ->add('educacion_musical', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, [
            'choices' => [0=>'Ninguna',1=>'Baja',2=>'Media',3=>'Alta'],
            'required' => true,
            'placeholder' => 'Seleccione una opción',
            'label' => 'Educación musical'
        ])
        ->add('ciudad', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
            'label' => 'Ciudad',
            'required' => true
        ])
        ->add('vecindario', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, [
            'choices' => [0=>'Ninguno',1=>'Bajo',2=>'Medio',3=>'Alto'],
            'required' => true,
            'placeholder' => 'Seleccione una opción',
            'label' => 'Ruido ambiental del vecindario'
        ])
        ->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, [
            'label' => 'Enviar',
            'attr' => ['class'=>'btn-default']
        ])
    ;

    $form = $formBuilder->getForm();


    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {

        $db = $app['db'];
        /* @var $db \Doctrine\DBAL\Connection */
        $personaId = $app['session']->get('persona_id');
        $db->update('persona', [
            'nombre' => $form->get('nombre')->getData(),
            'apellido' => $form->get('apellido')->getData(),
            'edad' => $form->get('edad')->getData(),
            'educacion_musical' => $form->get('educacion_musical')->getData(),
            'vecindario' => $form->get('vecindario')->getData(),
            'vol_1' => $app['session']->get('volumen_musica'),
            'vol_2' => $app['session']->get('calibracion_video')
        ], ['id' => $personaId]);

        return $app->redirect($app['url_generator']->generate('finalizado'));

    }

    return $app['twig']->render('datos-personales.html.twig', [
        'form' => $form->createView()
    ]);

})->bind('datos_personales');

$app->get('/finalizado', function(Request $request) use ($app) {

    return $app['twig']->render('finalizado.html.twig');

})->bind('finalizado');

//  Error

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
