<div class="content-wrap cndn-wrap">
    <div class="page-header">
        <div class="page-header-inner">
            <div class="page-header-content-left">
                <div class="page-header-content title-block">
                    <h1 class="title type-2">CCC(<span id="table_infos"></span>)</h1>
                </div><!-- Page Header Content -->
                <div class="page-header-content search-block">
                    <div class="search_filter">
                        <label>
                            <input type="search" id="search_BBB" class="form-control" placeholder="Search" autofocus />
                            <button class="btn-clear my-tooltip" ng-click="clear_search()" ng-shortcut="'meta+shift+c'" ng-shortcut-click data-title="ctrl+shift+c">Clear</button>
                        </label>
                    </div><!-- Search Filter -->
                </div>
                <div class="page-header-content button-block">
                    <button class="btn btn-bordered my-tooltip" data-toggle="modal" data-target="#FFF-filter-modal" ng-shortcut="'meta+shift+f'" ng-shortcut-click data-title="ctrl+shift+f"><i class="icon ion-md-funnel"></i>Filter</button>
                </div><!-- Page Header Content -->
            </div><!-- Page Header Content Left -->
            <div class="page-header-content-right">
                <div class="page-header-content reset-block">
                    <div class="reset-wrap">
                        <button class="btn-reset reset-tooltip refresh_table my-tooltip" ng-shortcut="'meta+shift+r'" ng-shortcut-click data-title="ctrl+shift+r">
                            <img class="img-responsive" src="./public/theme/img/content/reset.svg" alt="Reset" />
                        </button>
                    </div>
                </div><!-- Page Header Content -->
                <!-- Page Header Content -->
                <div class="page-header-content button-block" ng-show="$ctrl.add_permission">
                    <a href="#!/GGG/FFF/add" class="btn btn-primary my-tooltip" ng-shortcut="'meta+shift+n'" ng-shortcut-click data-title="ctrl+shift+n">Add New</a>
                </div><!-- Page Header Content -->
            </div><!-- Page Header Content Right -->
        </div><!-- Page Header Inner -->
    </div><!-- Page Header -->
    <div class="page-main-content list-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table" id="BBBs_list" style="width: 100% !important;">
                        <thead>
                            <tr>
                                <th>Actions</th>
                                <th>Short Name</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                </div><!-- Column -->
            </div><!-- Row -->
        </div><!-- Container -->
    </div><!-- Page Main Content -->
</div><!-- Content Wrap -->
<!-- Filter Modal -->
<div class="modal fade filter" id="FFF-filter-modal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ripple" data-dismiss="modal" aria-label="Close"><i class="icon ion-md-close"></i></button>
                <h5 class="modal-title" id="myModalLabel">DDD Filter</h5>
            </div><!-- Modal Header -->
            <div class="modal-body">
                <div class="modal-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Short Name</label>
                                <input type="text" class="form-control" id="short_name" name="short_name" placeholder="Enter Short Name" autocomplete="off">
                            </div><!-- Field -->
                        </div><!-- Column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" autocomplete="off">
                            </div><!-- Field -->
                        </div><!-- Column -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <md-select ng-model="$ctrl.status" md-on-close="clearSearchTerm()" data-md-container-class="selectdemoSelectHeader" placeholder="Select Status" ng-change="onSelectedStatus($ctrl.status)">
                                    <md-select-header class="demo-select-header">
                                        <input ng-model="searchTerm3" type="search" placeholder="Search for a From Account" class="demo-header-searchbox md-text">
                                    </md-select-header>
                                    <md-optgroup>
                                        <md-option ng-value="status.id" ng-repeat="status in $ctrl.extras.status | filter:searchTerm3">{{status.name}}</md-option>
                                    </md-optgroup>
                                </md-select>
                                <input type="hidden" class="form-control type-sm" name="status" id="status" value="">
                            </div><!-- Field -->
                        </div><!-- Column -->
                        <div class="col-md-6">
                            <button type="button" class="btn btn-rose my-tooltip" ng-click="reset_filter();$ctrl.to_account='';$ctrl.from_account='';$ctrl.journal='';$ctrl.status='';" ng-shortcut="'meta+shift+t'" ng-shortcut-click data-title="ctrl+shift+t">Reset Filter</button>
                        </div>
                    </div><!-- Row -->
                </div><!-- Modal Form -->
            </div><!-- Modal Body -->
        </div><!-- Modal Content -->
    </div><!-- Modal Dialog -->
</div><!-- Modal -->
<!-- Modal -->
<div class="modal fade alert-modal failure" id="delete_BBB" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">ARE YOU SURE?</h4>
            </div>
            <div class="modal-body">
                <h5>Delete</h5>
                <p>You can’t retrive the data again, Are you sure you want to delete? </p>
                <input type="hidden" name="BBB_id" id="BBB_id" value="">
                <button class="btn btn-grey" data-dismiss="modal" aria-label="Close">Cancel</button>
                <button class="btn btn-rose" ng-click="deleteConfirm()" type="button" data-dismiss="modal" aria-label="Close">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->