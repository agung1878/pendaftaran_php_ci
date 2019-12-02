<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="<?= base_url('dashboardApproval'); ?>" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>

                <li class="has_sub">
                    <a href="<?= base_url('approvalController'); ?>" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-format-list-bulleted"></i><span>Approval</span> </a>
                </li>
                
                <li class="has_sub">
                    <a href="<?= base_url('approvalController/accepted'); ?>" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-badge-check"></i><span>List Accepted</span> </a>
                </li>
                
                <li class="has_sub">
                    <a href="<?= base_url('approvalController/rejected'); ?>" class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-block"></i><span>List Rejected</span> </a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->