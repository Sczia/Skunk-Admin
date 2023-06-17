<div class="modal fade" id="points{{ $client->id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-maroon">
                <h5 class="modal-title text-white">Points</h5>

            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Loyalty Card</h4>
                        <img class="card-img-top" src="{{ asset('assets/images/loyalty.jpg') }}" alt="loyalty">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Points: {{ $client->recordCount() }}</h4>
                        @if ($client->recordCount() >= 4)
                            <div class="d-flex align-items-center">
                                <span>50% Off Back to Zero</span>
                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="hover"
                                    colors="primary:#eeca66,secondary:#e8b730" style="width:50px;height:50px">
                                </lord-icon>
                            </div>
                        @endif
                        @if ($client->recordCount() >= 8)
                            <div class="d-flex align-items-center">
                                <span>Free Car Wash</span>
                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="hover"
                                    colors="primary:#eeca66,secondary:#e8b730" style="width:50px;height:50px">
                                </lord-icon>
                            </div>
                        @endif
                        @if ($client->recordCount() >= 12)
                            <div class="d-flex align-items-center">
                                <span>Free Acid Rain Removal</span>
                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="hover"
                                    colors="primary:#eeca66,secondary:#e8b730" style="width:50px;height:50px">
                                </lord-icon>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
