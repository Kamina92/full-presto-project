<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('ui.titlee')}}</title>
</head>
<body style='background: url(https://images.unsplash.com/photo-1504309092620-4d0ec726efa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80); background-repeat: no-repeat; background-position: center; background-size: auto;'>
  <div>
      <h1 style="font-family:Segoe UI; color: White;text-align:center; margin-top: 50px; padding-start:10px; text-shadow: 1px 1px 1px black;">{{__('ui.congrats')}} {{$user->name}}{{__('ui.accettata')}}</h1>
        <br>
        <h2 style="font-family:Segoe UI; color: White;text-align:center;padding: 10px; text-shadow: 1px 1px 1px black;">{{__('ui.selodicitu')}}: {{$user->email}}</p>
        <br>
        <a style="background-color: white; color: black; padding:10px; border-radius:15px; font-size: 25px; border: 2px black;" href="{{route('login')}}">{{__('ui.ecco')}}</a>
        {{-- <a href="{{route('login')}}">{{__('ui.ecco')}}</a> --}}
    </div>
</body>
{{-- </html>
    <div>
       <h4 style="font-family:Segoe UI; color: White;text-align:center;padding: 10px; text-shadow: 3px 3px 3px black;">{{__('ui.dati')}}</h2>
       <h2 style="font-family:Segoe UI; color: White;text-align:center;padding: 10px; text-shadow: 3px 3px 3px black;">{{__('ui.reg-name')}}: {{$user->name}}</p>
       <h2 style="font-family:Segoe UI; color: White;text-align:center;padding: 10px; text-shadow: 3px 3px 3px black;">{{__('ui.desc')}}: {{$description}}</p>
       <h2 style="font-family:Segoe UI; color: White;text-align:center;padding: 10px; text-shadow: 3px 3px 3px black;">{{__('ui.renrev')}}</p>
       
    </body>
     </div> --}}