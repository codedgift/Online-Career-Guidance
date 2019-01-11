
<section id="main_content" style="margin-bottom: 10%;">

    <div class="container">

        
        <div class="row">
            <div class="col-md-12">
                <h3>Registered Users</h3>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Phone NO</th>
                            <th>Email</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($users as $val)
                            {
                                
                                //$date_det = strftime("%b %d, %Y", strtotime($val->send_date));
                                $i++;
                                echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$val->first_name.'</td>
                            <td>'.$val->last_name.'</td>
							<td>'.$val->username.'</td>
                            <td>'.$val->password.'</td>
                            <td>'.$val->phone.'</td>
                            <td>'.$val->email.'</td>
                            <td>'.$val->gender.'</td>
                            
                        </tr>';
                                
                                //$mod = '';
                            }
                        ?>
                    
                    </tbody>
                </table>


            </div>   
        </div><!-- End row-->   
    </div><!-- End container -->
</section><!-- End main_content-->

