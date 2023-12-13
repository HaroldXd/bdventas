<div>


    <div class="card body">
        <div class="form-group">
            <div class="col-sm-10">
                <label for="status">Select Provincia</label>
                <select class="form-control" wire:model.live="SelectedProvincia" id="idprovincia" name="idprovincia">
                    <option value="">Select Provincia</option>
                    @foreach ($provincias as $provincia)
                        <option value="{{ $provincia->idprovincia }}">{{ $provincia->nombre }}</option>
                    @endforeach
                </select>
           
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-sm-10">
             
                <label for="status">Select Distrito</label>
               
                <select class="form-control" id="iddistrito" name="iddistrito">
                   
                    @if ($distritos)
                   
                    @foreach ($distritos as $distrito)
                    <option value="{{ $distrito->iddistrito }}">{{ $distrito->nombre }}</option>
                  
                @endforeach
                @else
                <option value="">Select Distrito</option>
                @endif
               
                  
            </select>
           
                   
                
                
            </div>
        </div>
    </div>




</div>
