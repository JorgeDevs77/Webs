<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="/css/registro.css">
    <meta charset="utf-8">
    <script src="js/registro.js"></script>
    <meta name="view-porte" content="width=device-width scale=1.0">
</head>
<body>
    <nav id="menu">
 <lu>
    <li>
        <a href="portal.html">Home</a>
       <label>UNV DEVS</label>
        <a href="">Infor</a>
    </li>
 </lu>
       
    </nav>
    <nav id="celo">
     <img src="imgs/m2.jpg">
    </nav>
    <nav id="acesso">
        <br><br>
        <img src="imgs/rtte.png" id="escolher" >
        <br>  <br>
       <label>Novo Usuario</label>
       <br><br>
       <form method="POST" action="/php/dados.php">
       <input type="text" placeholder="Nome Completo" name="nome">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" placeholder="Estudante" name="estudante">
       <br><br>
       <select id="options" name="cursos">
        <option >Curso</option>
        <option value="Informática">Informática</option>
        <option value="Contabilidade">Contabilidade</option>
        <option value="Gestão Empresaria">Gestão Empresaria</option>
        <option value="Eletrecidade">Eletrecidade</option>
        <option value="Enfermagem">Enfermagem</option>
        <option value="Analíse Clínica">Analíse Clínica</option>
       </select>

       &nbsp;&nbsp;
       <input type="date" name="datas">
       &nbsp;&nbsp;
       <select id="sexo" onchange="trocar()" name="sexo">
        <option>Genero</option>
        <option>Homen</option>
        <option>Mulher</option>
       </select>
       
       &nbsp;&nbsp;
       <select name="nivel">
  <option>Nivel</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
 
       </select>
       <br> <br>
     <input type="text" placeholder=" N do Documento" name="documentos">
     &nbsp;&nbsp;&nbsp;&nbsp;
     <input type="text" placeholder=" N de Estudante" name="Nserial">
     <br> <br>
     <input type="password" placeholder="Crie uma senha" name="senha">
     &nbsp;&nbsp;&nbsp;&nbsp;
     <input type="password" placeholder="Confirma senha">
   
       <br> <br><br>
       <input type="submit"value="Cadastra">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="reset" value="Apagar">
    </form>
    </nav>

</body>
</html>