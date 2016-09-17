<div class="container">
    <div class="block block-condensed">
        <!-- START HEADING -->
        <div class="app-heading app-heading-small">
            <div class="title">
                <h5>TableExport</h5>
                <p>The simple, easy-to-implement plugin to export HTML tables to xlsx, xls, csv, and txt files.</p>
            </div>
            <div class="heading-elements">
                <div class="btn-group">
                    <button class="btn btn-primary btn-icon-fixed dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bars"></span> Export Data</button>
                    <ul class="dropdown-menu dropdown-left">
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'json',escape:'false'});"><img src='img/icons/json.png' width="24"> JSON</a></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"><img src='img/icons/json.png' width="24"> JSON (ignoreColumn)</a></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'json',escape:'true'});"><img src='img/icons/json.png' width="24"> JSON (with Escape)</a></li>
                        <li class="divider"></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'xml',escape:'false'});"><img src='img/icons/xml.png' width="24"> XML</a></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'sql'});"><img src='img/icons/sql.png' width="24"> SQL</a></li>
                        <li class="divider"></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'csv',escape:'false'});"><img src='img/icons/csv.png' width="24"> CSV</a></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'txt',escape:'false'});"><img src='img/icons/txt.png' width="24"> TXT</a></li>
                        <li class="divider"></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png' width="24"> XLS</a></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'doc',escape:'false'});"><img src='img/icons/word.png' width="24"> Word</a></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'powerpoint',escape:'false'});"><img src='img/icons/ppt.png' width="24"> PowerPoint</a></li>
                        <li class="divider"></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'png',escape:'false'});"><img src='img/icons/png.png' width="24"> PNG</a></li>
                        <li><a href="#" onClick ="$('#sortable-data').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/pdf.png' width="24"> PDF</a></li>
                    </ul>
                </div> 
            </div>
        </div>
        <!-- END HEADING -->
        
        <div class="block-content">
            
            <table class="table table-striped table-bordered datatable-basic" id="sortable-data">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>                                    
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                    </tr>    
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        
    </div>                                                
    
</div>
<!-- END PAGE CONTAINER -->