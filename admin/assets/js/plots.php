<div class="row">
    <div class="col-md-12">
                    <?php echo $status; ?>
        <?php echo form_open('', 'class="form-horizontal" id="myform"'); ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Projects</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <?php echo validation_errors('<div class="alert alert-danger text-center">', '</div>'); ?>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Project Name</label>
                        <div class="col-md-6 col-xs-12">
                                <input type="text" name="txtProject" value="<?php echo set_value('txtProject'); ?>" placeholder="Project Name" class="form-control" required/>
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Location</label>
                        <div class="col-md-6 col-xs-12">
                                <input type="text" name="txtLocation" value="<?php echo set_value('txtLocation'); ?>" placeholder="Project Location" class="form-control" required/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12">
                            <button type="submit" name="create-admin" class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>

                </div>
            </div>
        <?php echo form_close(); ?>

    </div>
</div>

<?php if($projects): ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>All Projects</strong></h3>
                    </div>
                <div class="panel-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Project Name</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($projects as $project):
                $i++;
            if($edit === $project->project_id)
            {
                echo '<tr>'.form_open("projects/editItem/$project->project_id").'
                <td>' . $i . '</td>
                <td><input class="form-control" type="text" value="' . $project->project_name . '" name="txtProjectEdit" required /></td>
                <td><input class="form-control" type="text" value="' . $project->location . '" name="txtLocationEdit" required /></td>
                <td style="text-align:left">
                 <button type="submit" name="btnEdit" class="btn btn-success">Update</button>
                </td>'.form_close().'
                </tr>';
            }else{
                echo '<tr>
                <td>' . $i . '</td>
                <td>' . $project->project_name . '</td>
                <td>' . $project->location . '</td>
                <td>
                <a href="'.base_url().'projects/index/edit/' . $project->project_id . '" class="btn"><i class="fa fa-pencil"></i>Edit</a>
                <a href="#" onclick="del_project(' . $project->project_id . ', \'' . $project->project_name . '\')" class="btn"><i class="fa fa-times"></i>Delete</a>
                </td>
                </tr>';
            }
                
             endforeach;
            ?>
            </tbody>
        </table>
                </div>
        </div>
    </div>
</div>

<?php endif; ?>
