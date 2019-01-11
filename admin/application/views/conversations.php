
<section id="main_content">

    <div class="container">

        
        <div class="row">
            <div class="col-md-12">
                <h3>Contact Messages</h3>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Sender</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($msgs as $val)
                            {
                                
                                $date_det = strftime("%b %d, %Y", strtotime($val->send_date));
                                $i++;
                                echo '<tr>
                            <td>'.$i.'</td>
                            <td>'.$val->sender_name.'</td>
                            <td><strong><a href="#" data-toggle="modal" data-target="#terms-txt'.$i.'">'.$val->subject.'</a></strong></td>
                            <td>'.$val->sender_email.'</td>
                            <td>'.$date_det.'</td>
                                <div class="modal fade" id="terms-txt'.$i.'" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
                                    <form action="messages/post/'.$val->id.'" method="post" accept-charset="utf-8">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="termsLabel">'.$val->subject.'</h4>
      </div>
      <div class="modal-body">
        <p>'.$val->message.'</p>
            <hr><input type="hidden" name="hdEmail" value="'.$val->sender_email.'" />
            Response: <textarea class="required form-control" name="txtResponse" placeholder="Type your response here" rows="8" style="height: 140px !important" required></textarea>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Send Response</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </form>
</div>
                        </tr>';
                                
                                $mod = '';
                            }
                        ?>
                    
                    </tbody>
                </table>


            </div>   
        </div><!-- End row-->   
    </div><!-- End container -->
</section><!-- End main_content-->

