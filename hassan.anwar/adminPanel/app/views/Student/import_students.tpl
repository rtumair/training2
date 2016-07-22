{include file="/var/www/html/adminPanel/app/views/Student/header.tpl" title="Import | SMP"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Import</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Import
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                        <form role="form" action="import" method="post" enctype="multipart/form-data">
                            Select CSV file to upload:
                            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                            <br><button type="submit" class="btn btn-primary">Import</button>
                        </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

{include file="/var/www/html/adminPanel/app/views/Student/footer.tpl"}
