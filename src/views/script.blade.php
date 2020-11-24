<script>
  jQuery(function ($) {    
    $(document).ready(function(){
        $('#calendar-{{ $id }}').fullCalendar({!! $options !!});
    });
  });
</script>
