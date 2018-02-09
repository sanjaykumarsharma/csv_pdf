
<div class="form-group">
    <label for="batch">Batch<span class="required">*</span></label>
    <input placeholder="Enter Batch name"
            id="batch"
            required
            name="batch"
            class="form-control p-3"
            @if(isset($batch))
            value="{{$batch->batch}}"
            @endif
            />
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Submit"/>
</div>
