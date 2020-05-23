<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @component('components/jumbotron')
                @slot('title')
                    Hello Jumbotron
                @endslot

                @slot('button')
                    Read more
                @endslot

                <!-- if not defined as slot, it will be default value -->
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem cumque sit, tempora labore saepe debitis laudantium ex dolores deserunt eos! Commodi itaque nobis eum voluptates similique libero officiis corporis dignissimos?
            @endcomponent


            <!-- Another way of component -->
            <?php
                $type = 'primary';
                $message = 'Success Info message';
            ?>
            <x-alert :type="$type" :message="$message"/>

            <!-- Another way of component -->
            <x-card >
                <x-slot name="card_title">
                    Welcome to Myanmar 
                </x-slot>

                <x-slot name="card_content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, ipsam illo quibusdam, amet placeat nulla officiis repudiandae totam eius dolorem assumenda quod quia magni. Iusto maiores nam itaque voluptatem quisquam.
                </x-slot>

                Click here
            </x-card>
        </div>
    </body>
</html>