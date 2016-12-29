<form id="form" name="form" method="post" action="addEmployee.php">  
    <div class="info">
        <label for="firstname">First Name</label>
        <br>
        <input type="text" name="firstname" id="fname" required/>
        <br>
        <label for="lastname">Last Name</label>
        <br>
        <input type="text" name="lastname" id="lname" required/>
        <br>
    </div>
    <div class="info">
        <label >Email</label>
        <br>
        <input type="text" name="email" id="email"  required />
        <br>
        <label >Phone
        <span>(Example:  0123456789)</span>
        </label>
        <br>
        <input type="text" name="phone" id="phone" required/>
    </div>
    <div class="info">
        <br>
        <label >Gender
        </label>
        <br>
        <input type="radio" name="gender" value="male" required/> Male
        <input type="radio" name="gender" value="female"/>Female
        <br>
         <label>Is Faculty a Manager</label>
        <br>
        <input name="manager" value="yes" type="checkbox"> Yes
    </div>
    <div class="info">
         <label>Department
        </label>
        <br>
            <select name="department">
            <option>Computer Science</option>
            <option>Information Technology</option>
            <option>Information Science</option>
            <option>Information Systems</option>
        </select>
    <div>
    <br>

      <button type="submit">Add Faculty</button>

    
</form>
 
