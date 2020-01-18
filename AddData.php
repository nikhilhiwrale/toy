 <?php 
  include 'Head.php';
 
 ?>
<style>
    label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    font-size: medium;
}
</style>

  <div class="row">
      <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
      
      
      <div class="col-sm-12" style="display:none;">
          
            
            <div class="form-group">
            <div class="col-sm-4">
                <label> Category</label>
                <select class="form-control">
                    <option>--Select Category--</option>
                    <option>Sherwanis</option>
                    <option> Suits, blazers and tuxedos</option>
                  <option> Indo western type</option>
                  <option> Bandh galas</option>
                  <option>            Nehru jackets</option>
                     <option>                        Kurta sets
</option> 
                </select>    
            </div>
            </div>
            <BR>
              <div class="col-sm-4">
                   <label> Size</label>
                <select class="form-control">
                    <option>--select shirt size--</option>
                    <option>S</option>
                    <option>M</option>
                  <option> L</option>
                  <option> XL</option>
                  <option>XXL</option>
              
 
                </select>    
            </div>
            <div class="col-sm-4">
               
                <input type="text" class="form-control" placeholder="Enter Trouser Size">
                
            </div>
             <div class="col-sm-4">
               
                <input type="text" class="form-control" placeholder="Enter Waist Size">
                
            </div>
              <div class="col-sm-4">
               
                <input type="text" class="form-control" placeholder="Enter length">
                
            </div>
            
            
        </div>
        
    </div>  