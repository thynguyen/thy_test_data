<div class="card card-danger card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Alert</div></div>
    <!--end::Header--><!--begin::Body-->
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
        {{#each this}}
        <p>{{ message }}</p>
        {{/each}}
        </div>        
    </div>
    <!--end::Body-->
</div>