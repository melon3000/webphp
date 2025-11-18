<h1>Muusika küsitlus</h1>
<form id="musicaForm">
    <table id="Tabel1">
        <tr>
            <td>
                <strong>Milliseid ansambleid sa tead? *</strong>
                <span class="error" id="ansamblidError"></span>
                <br>

                <input type="checkbox" name="valik" id="abba" value="ABBA" onchange="ansambleid()">
                <label for="abba">ABBA</label>
                <br>

                <input type="checkbox" name="valik" id="Moderntalking" value="Modern talking" onchange="ansambleid()">
                <label for="Moderntalking">Modern Talking</label>
                <br>

                <input type="checkbox" name="valik" id="Queen" value="Queen" onchange="ansambleid()">
                <label for="Queen">Queen</label>
                <br>

                <input type="checkbox" name="valik" id="nirvana" value="Nirvana" onchange="ansambleid()">
                <label for="nirvana">Nirvana</label>
                <br>
            </td>
            <td>
                <div id="vastus1"></div>
            </td>
        </tr>

        <tr>
            <td>
                <strong><label for="arvate">Mida arvad muusika kuulamisest koolis? *</label></strong>
                <input type="text" id="arvate" name="arvate" oninput="SinuArvade()">
                <span class="error" id="arvateError"></span>
            </td>
            <td>
                <div id="vastus2"></div>
            </td>
        </tr>

        <tr>
            <td>
                <strong><label for="slider">Mitu tundi päevas sa kuulad muusikat? *</label></strong>
                <input type="range" id="slider" name="slider" min="0" max="24" value="0" oninput="sliderLuugub()">
                <div id="sliderValue">0 tundi</div>
                <span class="error" id="sliderError"></span>
                <br><br>
            </td>
            <td>
                <div id="vastus3"></div>
            </td>
        </tr>

        <tr>
            <td>
                <strong>Kas sa kuulad raadiot? *</strong>
                <span class="error" id="raadioError"></span>
                <br>
                <input type="radio" name="raadio" id="jah" value="Sa kuulad raadio!" onchange="valiRadio()">
                <label for="jah">Jah</label>

                <input type="radio" name="raadio" id="ei" value="Sa ei kuula raadio!" onchange="valiRadio()">
                <label for="ei">Ei</label>
            </td>
            <td>
                <div id="vastus4"></div>
            </td>
        </tr>

        <tr>
            <td>
                <strong><label for="grupp">Milliseid raadiojaamu oskad nimetada? *</label></strong>
                <input type="text" id="grupp" name="grupp" oninput="kirjutajaamu()">
                <span class="error" id="gruppError"></span>
            </td>
            <td>
                <div id="vastus5"></div>
            </td>
        </tr>

        <tr>
            <td>
                <strong>Millist muusika stiili sa kõige rohkem kuulad? *</strong>
                <span class="error" id="stiilError"></span>
                <br>

                <input type="radio" name="stiil" id="rock" value="Rock" onchange="valiStiil()">
                <label for="rock">Rock</label>
                <br>

                <input type="radio" name="stiil" id="hardrock" value="Hard Rock" onchange="valiStiil()">
                <label for="hardrock">Hard Rock</label>
                <br>

                <input type="radio" name="stiil" id="metall" value="Metall" onchange="valiStiil()">
                <label for="metall">Metall</label>
                <br>

                <input type="radio" name="stiil" id="heavymetall" value="Heavy Metall" onchange="valiStiil()">
                <label for="heavymetall">Heavy Metall</label>
                <br>

                <input type="radio" name="stiil" id="newmetall" value="New Metall" onchange="valiStiil()">
                <label for="newmetall">New Metall</label>
                <br>

                <input type="radio" name="stiil" id="newrock" value="New Rock" onchange="valiStiil()">
                <label for="newrock">New Rock</label>
                <br>

                <input type="radio" name="stiil" id="rockandroll" value="Rock and Roll" onchange="valiStiil()">
                <label for="rockandroll">Rock and Roll</label>
                <br>
            </td>
            <td>
                <div id="vastus6"></div>
            </td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="2">
                <button type="button" onclick="saadaVastused()">Saada vastused</button>
                <input type="reset" onclick="puhasta()" value="Puhasta">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div id="kokkuvote"></div>
            </td>
        </tr>
    </table>
</form>