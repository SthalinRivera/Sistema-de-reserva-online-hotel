
                <!-- Main content -->
    <section class="content-11">

    <form action="" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
          <div class="form-group">
                  <label>Desde:</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="departure" class="form-control datetimepicker-input" data-target=""/>
                    </div>
                </div>
            
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
          <div class="form-group">
                  <label>Hasta:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="date" name="arrival" class="form-control datetimepicker-input" data-target=""/>
                    </div>
                </div>
           
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
          <label>Buscar:</label>
              <button type="submit" class="btn btn-block btn-outline-primary">Buscar</button>   
            
          </div>      
         
         </form>

        </div>
        <?php
 $ROOMID=12;

// filtrando las habitaciones
 // ======================================================================================================
                    $mydb->setQuery("SELECT * FROM `tblreservation`     WHERE ((
                        '2021-01-19' >= DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d')
                        AND  '2021-01-19' <= DATE_FORMAT(`DEPARTURE`,'%Y-%m-%d')
                        )
                        OR (
                        '2021-01-21' >= DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d')
                        AND  '2021-01-21' <= DATE_FORMAT(`DEPARTURE`,'%Y-%m-%d')
                        )
                        OR (
                        DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d') >=  '2021-01-19'
                        AND DATE_FORMAT(`ARRIVAL`,'%Y-%m-%d') <=  '2021-01-21'
                        )
                        )
                        ");

                  $curs = $mydb->loadResultList(); 
                     
                  foreach ($curs as $result) {
                    echo $result->ARRIVAL ."<br>";

                   }    ?>
                   <div class="card-body table-responsive p-0">
                   <table class="table table-hover text-nowrap">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>User</th>
                         <th>Date</th>
                         <th>Status</th>
                         <th>Reason</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>183</td>
                         <td>John Doe</td>
                         <td>11-7-2014</td>
                         <td><span class="tag tag-success">Approved</span></td>
                         <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                       </tr>
                       <tr>
                         <td>219</td>
                         <td>Alexander Pierce</td>
                         <td>11-7-2014</td>
                         <td><span class="tag tag-warning">Pending</span></td>
                         <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                       </tr>
                       <tr>
                         <td>657</td>
                         <td>Bob Doe</td>
                         <td>11-7-2014</td>
                         <td><span class="tag tag-primary">Approved</span></td>
                         <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                       </tr>
                       <tr>
                         <td>175</td>
                         <td>Mike Doe</td>
                         <td>11-7-2014</td>
                         <td><span class="tag tag-danger">Denied</span></td>
                         <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
                 <!-- /.card-body -->

               
// ============================================================================================================================

                  



        