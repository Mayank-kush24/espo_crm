<div>
    <h2>Intern Field Access</h2>

    <div class="field">
        <label>Entity</label>
        <select data-name="entityName">
            <option value="Contact">Contact</option>
            <option value="Lead">Lead</option>
            <!-- add more -->
        </select>
    </div>

    <div class="field">
        <label>Field Name</label>
        <input type="text" data-name="fieldName"/>
    </div>

    <div class="field">
        <label>Start Time</label>
        <input type="datetime-local" data-name="startDateTime"/>
    </div>

    <div class="field">
        <label>End Time</label>
        <input type="datetime-local" data-name="endDateTime"/>
    </div>

    <button class="btn" data-action="save">Save</button>
</div>
