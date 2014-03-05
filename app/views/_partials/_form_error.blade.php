@if($errors->any())
    <div class="space-4"></div>
    <div class="alert" style="text-align:left;">
        <ul>
            {{ implode('', $errors->all('<li>:message</li>'))}}
        </ul>
    </div>
@endif