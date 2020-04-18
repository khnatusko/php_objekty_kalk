{extends file="main.tpl"}

{block name=footer}{/block}

{block name=content}
    
	<form action="{$conf->action_url}calcCompute" method="post">

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



{include file='messages.tpl'}

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
{if isset($resx->resultx)}
<p>Gratulacje, udało Ci się obliczyć wartość VAT!</p>
<center><img src="{$conf->app_root}/images/pepe.png" alt="Gratulacje, udało Ci się obliczyć wartość VAT"></center>
{/if}
{/block}