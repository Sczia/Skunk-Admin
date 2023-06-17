<div class="modal fade" id="show{{ $client->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white">Information</h5>

            </div>
            <div class="modal-body">
                <table class="table table-hover">


                    <tbody>
                        <tr>
                            <td class="text-left">Name:</td>
                            <td class="text-left">{{ $client->name }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Email:</td>
                            <td class="text-left">{{ $client->email}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Company name:</td>
                            <td class="text-left">{{ $client->company }}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Address:</td>
                            <td class="text-left">{{ $client->address}}</td>
                        </tr>
                        <tr>
                            <td class="text-left">Phone number:</td>
                            <td class="text-left">{{ $client->number }}</td>
                        </tr>
                      
                    </tbody>
                </table>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>
