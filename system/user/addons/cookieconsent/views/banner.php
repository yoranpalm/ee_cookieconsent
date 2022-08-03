<div class='cc-dialog hidden'>
    <div>
        <h4><?= $settings['banner_title'] ?></h4>
        <div class='cc-info'>
            {exp:consent:form consent='ee:cookies_functionality|ee:cookies_performance|ee:cookies_targeting' form_id='cookieConsentForm'}
            <p><?= $settings['banner_text'] ?></p>
            <a href='<?= $settings['cookiepolicy_path'] ?>' target='_blank'><?= $lang['view_cookiepolicy'] ?></a>
        </div>
        <div class='cc-checkboxes'>
            {consents}
                <label>
                    <input type='checkbox' name='{consent_short_name}' value='y' {if consent_granted}checked{if:elseif ! consent_response_date}checked{/if} {if consent_short_name == 'ee:cookies_functionality'}checked disabled{/if}>
                    <b>{consent_title}</b>
                    <p>{consent_request}</p>
                </label>
            {/consents}
            </div>
            <input id='consent-submit' type='submit' name='consent-submit' value='Ok' hidden>
            {/exp:consent:form}
        </div>
        <div class='cc-buttons'>
            <a class='cc-button-save'><?= $lang['button_save'] ?></a>
            <a class='cc-button-preferences'><?= $lang['button_preferences'] ?></a>   
            <a class='cc-button-accept'><?= $lang['button_accept'] ?></a>
        </div>
    </div>
</div>