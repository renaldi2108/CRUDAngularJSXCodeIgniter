<table class="table table-hover">
  <thead>
  <tr>
    <th class="span4">No</th>
    <th class="span6">Name</th>
  </tr>
  </thead>
  <tbody>
  <tr ng-repeat="data in listData.data">
    <td>{{ $index+1 }}</td>
    <td><i>{{ data.name }}</i></td>
    <td>
      <div class="pull-right">
        <a class="btn btn-primary btn-mini" href="<?php echo site_url('#!/edit/{{data.id_data}}'); ?>"><i class="icon-edit icon-white"></i> Edit</a>
        <button ng-click="delete(data)" class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Delete</button> 
      </div>
    </td>
  </tr>
  </tbody>
</table>