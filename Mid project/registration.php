<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRATION_FORM</title>
</head>
<body>
	<form>
    <table border="0"  cellpadding="20"  width="700px" align="center" >
    	<tr align="center" >
    		<th colspan="2" >
    			WELCOME TO REGISTRATION FORM
    		</th>
    	</tr>
    	<tr>
    		<td>Name</td>
    		<td><input type="text" name="name" placeholder="use valid name" ></td>
    	</tr>
    	<tr>
    		<td>Email</td>
    		<td><input type="text" name="email" placeholder="use valid email" ></td>
    	</tr>
    	<tr>
    		<td>Gender</td>
    		<td>
    		<input type="radio" id="gender" name="male">Male</input>
			<input type="radio" id="gender" name="male">Female</input>
			<input type="radio" id="gender" name="male">Other</input>
    		</td>
    	</tr>
    	<tr>
    		<td>Date of Birth</td>
    		<td> <input type="date" id="dateofbirth" name="dateofbirth"></td>
    	</tr>
    	<tr>
    		<td>Blood Group</td>
    		<td>
    		    <select name="bloodgroup"> 
	                <option id="bloodgroup" name="bloodgroup" value="Null">select your blood group</option></selected>
	                <option id="bloodgroup" name="bloodgroup" value="A+">A+</option>
	                <option id="bloodgroup" name="bloodgroup" value="A-">A-</option>
	                <option id="bloodgroup" name="bloodgroup" value="B+">B+</option>
	                <option id="bloodgroup" name="bloodgroup" value="B-">B-</option>
	                <option id="bloodgroup" name="bloodgroup" value="AB+">AB+</option>
	                <option id="bloodgroup" name="bloodgroup" value="AB-">AB-</option>
	                <option id="bloodgroup" name="bloodgroup" value="O+">O+</option>
	                <option id="bloodgroup" name="bloodgroup" value="O-">O-</option>
                     <select/>              
    		</td>
    	</tr>
    	<tr>
    	        <td>Degree</td>
    		<td>
			<input type="Checkbox" id="degree" name="degree" value="SSC">SSC
	                <input type="Checkbox" id="degree" name="degree" value="HSC">HSC
	                <input type="Checkbox" id="degree" name="degree" value="BSc">BSc
	                <input type="Checkbox"id="degree" name="degree" value="MSc">MSc
               </td>
        </tr>
        <tr>
        	<td>Photo</td>
        	<td><img src="profile.png" height="50px" width="40px"><br><input type="file" name="fileToUpload" id="fileToUpload"></td>
        </tr>
        <tr>
        	<td>

        		                             
        	</td>
        </tr>
        <tr align="right" >

        	<td>
                        <a href= 'login.php'> Registrated </a> &nbsp
        		<input type="submit" name="Reset" value="Reset"> 

        	</td>
        	
        </tr>
    	
    </table>
    </form>

</body>
</html>
