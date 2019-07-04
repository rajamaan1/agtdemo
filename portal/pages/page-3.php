<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!--begin::Portlet-->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Backend switch between bananas and manzanas:</h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <div class="kt-section__info">
				 <button type="button" id="get-fruits" class="btn btn-outline-brand btn-elevate btn-pill">Get Fruits</button>
			</div>
            <div id='txt-fruits' class="kt-section__content">

            </div>
        </div>

        <!--begin::Section-->
        <div class="kt-section">
            <div class="kt-section__info">
				 <button type="button" id="get-recipes" class="btn btn-outline-brand btn-elevate btn-pill">Get Recipes</button>
			</div>
            <div id='txt-recipes' class="kt-section__content">

            </div>
        </div>

        <!--end::Section-->
    </div>
</div>

<!--end::Portlet-->









</div>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
$('#get-fruits').click(function() {

  $('#txt-fruits').text('loading . . .');

  $.ajax({
    type:"GET",
    url:"http://andesgt.local/service/data/fruits",
    success: function(data) {
      $('#txt-fruits').text(JSON.stringify(data));
    },
    dataType: 'jsonp',
  });

});
</script>

<script type="text/javascript">
$('#get-recipes').click(function() {

  $('#txt-recipes').text('loading . . .');

  $.ajax({
    type:"GET",
    url:"http://andesgt.local/service/data/recipes",
    success: function(data) {
      $('#txt-recipes').text(JSON.stringify(data));
    },
    dataType: 'jsonp',
  });

});
</script>

