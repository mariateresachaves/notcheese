{include file='common/header.tpl'}
{if $USERNAME}
	{if $ISELDER}
		{include file='common/navAuthenticated.tpl'}
	{else}
		{include file='common/navStudent.tpl'}
	{/if}
{else}
  {include file='common/navVisitor.tpl'}
{/if}
<body class="bg-light-gray">
{foreach from=$talks item=talk}
<div class="media">
  <div class="media-left">
    <a href="#">
		<img class="media-object" src="{$talk.url}" alt="test">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">{$talk.firstName} {$talk.lastName}</h4>
    <p>Classificação: {$talk.rate}</p>
	<p class="interest">Interesses: {$talk.interests}</p>
	<input type="submit" class="text_to_speech" value="Click me">
  </div>
</div>
{/foreach}

<script type="text/javascript">

	function handler() {
		
		alert("hello");
		/*
		$.ajax(
			url: "../api/text_to_speech.php",
			data: "text="
		);
		*/
		
		return false;
	}

	$(document).ready( function() {
		$(".media-body > .text_to_speech").click(handler);
	});

	

</script>
</body>