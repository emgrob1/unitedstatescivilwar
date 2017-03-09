
<html>
<head>
<div>
  {{partial('partials/nav_menu')}}
  
</div>
  
</head>

<body>
{{ form('createGenerals/save', 'method': 'post') }}
<div>
 <label for="name">Side</label>
    {{ text_field("faught_for", "size": 32) }}
    <label for="name">Name</label>
    {{ text_field("general_name", "size": 32) }}
    </div>
    <div>
    {{ submit_button('Save') }}
</div>
{{ end_form() }}
</html>