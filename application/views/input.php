<form name="myForm" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="name">Name</label>
    <div class="controls">
      <input class="input-xlarge" type="text" name="name" id="name" ng-model="myData.name" required>
      <span ng-show="myForm.name.$error.required" class="help-inline">Required</span>
    </div>
  </div>

  <div class="form-actions">
    <button ng-click="save()" ng-disabled="isClean() || myForm.$invalid" class="btn btn-primary"><i class="icon-ok icon-white"></i> Save</button>
    <a href="<?php echo site_url('#/'); ?>" class="btn btn-link">Cancel</a>
    <button ng-click="delete()" class="btn btn-danger pull-right" ng-show="myData.id_data"><i class="icon-trash icon-white"></i> Delete</button>
  </div>
  
</form>