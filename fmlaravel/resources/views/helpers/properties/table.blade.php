<table class="property-table">
    <thead>
        <tr>
            <th>Info</th>
            <th>Type</th>
            <th>Contract</th>
            <th class="center">Bath</th>
            <th class="center">Beds</th>
        </tr>
    </thead>

    <tbody>
        @for ($i = 0; $i < 5; $i++)
            <tr>
                <td class="property-table-info">
                    <a href="#" class="property-table-info-image">
                        <img src="{{{ URL::asset('assets/img/tmp/medium/1.jpg') }}}" alt="">
                    </a><!-- /.property-table-info-image -->

                    <div class="property-table-info-content">
                        <div class="property-table-info-content-title">
                            <a href="#">Embers Field</a>
                        </div><!-- /.property-table-info-content-title -->

                        <ul class="property-table-info-content-location">
                            <li><a href="#">New York</a>,</li>
                            <li><a href="#">Village</a></li>
                        </ul><!-- /.property-table-info-content-location -->

                        <div class="property-table-info-content-price">
                            $ 17,000
                        </div>
                    </div><!-- /.property-table-info-content -->
                </td>
                <td class="property-table-type">House</td>
                <td class="property-table-contract">Sale</td>
                <td class="property-table-baths">2</td>
                <td class="property-table-beds">4</td>
            </tr>
        @endfor
    </tbody>
</table><!-- /.properties-table -->
