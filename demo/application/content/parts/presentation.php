<div id="presentation-box">
    <p id="presentation-info"><?php echo $dict['presentation-info'] ?></p>
    <div id="theme-box">
        <label for="theme-selector"><?php echo $dict['theme-select'] ?></label>
        <select name="theme-selector" id="theme-selector">
            <option value="horde">Horde</option>
            <option value="alliance">Alliance</option>
            <option value="minimal">Minimal</option>
            <option value="empty">Empty</option>
        </select>
        <label for="lang-selector"><?php echo $dict['lang-select'] ?></label>
        <select name="lang-selector" id="lang-selector">
            <option value="en"><?php echo $dict['lang-en'] ?></option>
            <option value="pl"><?php echo $dict['lang-pl'] ?></option>
        </select>
    </div>
</div>