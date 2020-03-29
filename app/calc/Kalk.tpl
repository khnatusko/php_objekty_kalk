{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=footer}{/block}

{block name=content}

   
	<form action="{$conf->action_root}calcCompute" method="post">

<fieldset>
	<center>
	<h1>KALKULATOR <span class="badge badge-success">VAT</span></h1>
	<label for="x">Kwota Netto: </label>
	<input id="x" type="text" name="x" value="{$vat->x}"><br />
	<label for="y">Kwota Brutto: </label>
	<input id="y" type="text" name="y" value="{$vat->y}"><br />

	
	<label for="proc">Procent: </label>
	<select id= "proc" name="proc">
		<option value="trzy">3%</option>
		<option value="piec">5%</option>
		<option value="siedem">7%</option>
		<option value="osiem">8%</option>
		<option value="dwadziesciadwa">22%</option>
		<option value="dwadziesciatrzy">23%</option>
	</select><br />
	<button type="submit" class="btn btn-dark">Oblicz</button></center>
</fieldset>
</form>	
</div>
{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs->getErrors() as $err}
		{strip}
			<li>{$err}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $msgs->getInfos() as $inf}
		{strip}
			<li>{$inf}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}

<center>
{if isset($resx->resultx)}
	<h4>Wynik netto</h4>
	<p class="res">
	{$resx->resultx}
	</p>
{/if}
{if isset($resy->resulty)}
	<h4>Wynik brutto</h4>
	<p class="res">
	{$resy->resulty}
	</p>
{/if}


{/block}