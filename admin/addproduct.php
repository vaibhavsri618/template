<?php

require 'connection.php';
require 'header.php'?>

<?php
require 'asider.php'
?>
<div id="main-content">

<h2>Welcome John</h2>
   <p id="page-intro">What would you like to do?</p>
   <div class="clear"></div>
   <!-- End .clear -->
   <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
         <h3>Content box</h3>
         <ul class="content-box-tabs">
            <li><a href="#tab1" >
               Table</a>
            </li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2" class="default-tab">Forms</a></li>
         </ul>
         <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
      <div class="tab-content default-tab" id="tab2">
      <div class="notification attention png_bg">

      <?php 
        echo $_GET['id1'];
        ?>
      </div>
            <form action="addprod.php" method="post" enctype="multipart/form-data">
               <fieldset>
                  <!-- Set class to "column-left" or "column-right"
                     on fieldsets to divide the form into columns -->
                  <p>
                     <label>Name</label>
                     <input class="text-input medium-input datepicker" type="text" id="medium-input"
                        name="name" /> 
                   </p>
                  <p>
                     <label>Price</label>
                     <input class="text-input small-input" type="text" id="small-input"
                        name="price"/>
                     <!-- Classes for input-notification: success, error, information, attention -->
                     <br /><small>Price of the product</small>
                  </p>
                  
                  <p>
                     <label>Images</label>
                     <input class="text-input small-input" type="file" id="small-input"
                        name="image" />
                  </p>
                  <p>
                  <?php
                    $sql = "SELECT * FROM categories";
                    $result = $conn->query($sql);
                    
                   ?>
                     <label>Category</label>              
                     <select name="dropdown" class="small-input">
                        <option value="select">Select</option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='".$row['id']."'>".$row['name']."</option>";
                            }
                        } else {
                            echo "0 results";
                        }
                         
                        ?>

                        
                     </select>
                  </p>
                  
                  <p>
                     <label>Tags</label>

                     <?php
                        $sql1 = "SELECT * FROM tags";
                        $result1 = $conn->query($sql1);
                        
                        if ($result1->num_rows > 0) {
                            while ($row1 = $result1->fetch_assoc()) {
                                echo "<input type='checkbox' name='check_list[]' value='".$row1['id']."' />".$row1['name']."";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                    
                  
                  </p>

                  <p>
                     <label>Short Description</label>
                     <input class="text-input small-input" type="text" id="small-input"
                        name="short" />
                  </p>
                 

                  <p>
                     <label>Description</label>
                     <textarea class="text-input textarea wysiwyg" id="textarea" 
                        name="textfield" cols="79" rows="15"></textarea>
                  </p>
                  <p>
                     <input class="button" type="submit" value="Submit" name="submit" />
                  </p>
               </fieldset>
               <div class="clear"></div>
               <!-- End .clear -->
            </form>
         </div>
         <!-- End #tab2 -->        
      
         <div class="tab-content" id="tab1">
            <!-- This is the target div. id must match the href of this div's tab -->
            <div class="notification attention png_bg">
               <a href="#" class="close">
               <img src="resources/images/icons/cross_grey_small.png" 
                  title="Close this notification" alt="close"/></a>
               <div>
                  This is a Content Box. You can put
                  whatever you want in it. By the way, 
                  you can close this notification with the top-right cross.
               </div>
            </div>
            <table>
               <thead>
                  <tr>
                     <th><input class="check-all" type="checkbox" /></th>
                     <th>Column 1</th>
                     <th>Column 2</th>
                     <th>Column 3</th>
                     <th>Column 4</th>
                     <th>Column 5</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <td colspan="6">
                        <div class="bulk-actions align-left">
                           <select name="dropdown">
                              <option value="option1">Choose an action...</option>
                              <option value="option2">Edit</option>
                              <option value="option3">Delete</option>
                           </select>
                           <a class="button" href="#">Apply to selected</a>
                        </div>
                        <div class="pagination">
                           <a href="#" title="First Page">&laquo; 
First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                           <a href="#" class="number" title="1">1</a>
                           <a href="#" class="number" title="2">2</a>
                           <a href="#" class="number current" title="3">3</a>
                           <a href="#" class="number" title="4">4</a>
                           <a href="#" title="Next Page">
Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                        </div>
                        <!-- End .pagination -->
                        <div class="clear"></div>
                     </td>
                  </tr>
               </tfoot>
               <tbody>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
                        <img src="resources/images/icons/pencil.png"
                        alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png"
                         alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" 
                        alt="Edit Meta" /></a>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
<img src="resources/images/icons/pencil.png" 
alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
                        <img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
                        <img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
                        <img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
                        <img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
                        <img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" /></td>
                     <td>Lorem ipsum dolor</td>
                     <td><a href="#" title="title">Sit amet</a></td>
                     <td>Consectetur adipiscing</td>
                     <td>Donec tortor diam</td>
                     <td>
                        <!-- Icons -->
                        <a href="#" title="Edit">
                        <img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                        <a href="#" title="Delete">
                        <img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                        <a href="#" title="Edit Meta">
                        <img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <!-- End #tab1 -->
        </div>
      <!-- End .content-box-content -->
   </div>
   <!-- End .content-box -->
</div>
           

<?php
require 'footer.php'
?>