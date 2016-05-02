  
 
 
 <form action="http://localhost:8080/registro/" name="form1" id="form1" method="post" >  
 
 <table width="200" border="0" align="center">  
  <tr> 

   <td>Registro</td>
   <td>Usuario:</td>  
   <td><input type="text" name="usuario" id="usuario"> <font color="#FF0000"></font></td> 
  </tr>  
  <tr>  
   <td>Correo Electrónico:</td>  
   <td><input type="text" name="email" id="email"> <font color="#FF0000"></font></td>  
  </tr>  
  <tr>  
   <td>Contraseña:</td> 
   <td><input type="password" name="password" id="password"> <font color="#FF0000"></font></td>  
  </tr>  
  <tr>  
   <td>Ciudad:</td>  
   <td><select name="city" id="city">  
   <option value="">Seleccionar</option>  
   <option value="Colima">Colima</option>  
   <option value="Villa_de_Alvarez">Villa de Álvarez</option>  
   <option value="Coquimátlan">Coquimátlan</option>  
   <option value="Minatitlán">Minatitlán</option>
   <option value="Armería">Armería</option>  
   <option value="Manzanillo">Manzanillo</option>
   </select> <font color="#FF0000"></font></td>  
  </tr>  
  <tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Registrar"></td></tr>  
 </table>  
 </form>  