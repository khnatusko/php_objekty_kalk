{extends file = "main.tpl"}



{block name = content}
    <h2>Historia obliczeń</h2> <br/>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Netto</th>
                    <th>Brutto</th>
                    <th>Procent</th>
                    <th>Wynik Netto</th>
                    <th>Wynik Brutto</th>
                </tr>
            </thead>
            <tbody>
            {foreach $datas as $d}
                {strip}
                    <tr>
                        <td>{$d["netto"]}</td>
                        <td>{$d["brutto"]}</td>
                        <td>{$d["procenty"]}</td>
                        <td>{round($d["wyn_netto"],3)}</td>
                        <td>{round($d["wyn_brutto"],3)}</td>
                    </tr>
                {/strip}
            {/foreach}
            </tbody>
        </table>
    </div>
            {include file = "messages.tpl"}
{/block}