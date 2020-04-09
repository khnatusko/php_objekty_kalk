{extends file="main.tpl"}

{block name=content}
    <form action="{$conf->action_url}login" method="post">
	<center>
	<h1>Logowanie do<span class="badge badge-success">Kalkulatora VAT</span></h1>
        <fieldset>
            <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_password">Password: </label>
			<input id="id_password" type="password" name="password" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
		</div>
        </fieldset>
    </form>
        
{include file='messages.tpl'}

{/block}