<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>


    <style>
        body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: linear-gradient(135deg, #111, #2b2b2b);
}

.login-page {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-card {
  width: 100%;
  max-width: 600px;
  background: #676262;
  padding: 90px;
 border-radius: 10px;
  box-shadow: 0 20px 50px rgba(0,0,0,.25);
}

.login-card h1 {
  font-size: 26px;
  text-align: center;
  margin-bottom: 35px;
   color: #c8c6c6
 
}

.login-card h2 {
  text-align: center;
  font-size: 32px;
  margin-bottom: 10px;
   color: #c8c6c6
   


}

.login-card p {
  color: #f4f4f4;
  margin-bottom: 30px;
}

.login-card input {
  width: 50%;
  height: 52px;
  margin-bottom: 16px;
  padding: 0 16px;
  border: 1px solid #ddd;
  border-radius: 12px;
}

.login-card input:focus {
  outline: none;
  border-color: #111;
}

.login-card button {
  width: 80%;
  height: 52px;
  border: none;
  border-radius: 12px;
  background: #50ae7f;
  color: white;
  font-weight: 700;
  cursor: pointer;
}

.login-card button:hover {
  background: #333;
}



</style>


</head>
<body>
    <section class="login-page">
  <div class="login-card">

    <h1>Hola Dave! </h1>
    <h2></h2>
    <p>Accede al panel de administración</p>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <input 
        type="email" 
        name="email" 
        placeholder="Email" 
        value="{{ old('email') }}"
        required 
        autofocus
      >

      <input 
        type="password" 
        name="password" 
        placeholder="Contraseña" 
        required
      >

      <button type="submit">Iniciar sesión</button>
    </form>

  </div>
</section>
</body>
</html>