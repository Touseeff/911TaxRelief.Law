<!DOCTYPE html>
<html>

<head>
    <title>911TaxRelief.Law</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: auto;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hello {{ ucwords(strtolower($userName)) }}</h1>
        <p>We are pleased to inform you that your application has been successfully processed at 911TaxRelief.Law as per
            the following records associated with your tax registration:</p>
        <!-- Updated Information Section -->
        @if (!empty($updatedValues))
            <h3>Updated Record:</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>URL Pin</th>
                            <th>Full Name</th>
                            <th>Address 01</th>
                            <th>Address 02</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Postal Code / Zip Code</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            // Build the full name, check if keys exist in updatedValues
                            $full_name =
                                ($updatedValues['first'] ?? '') .
                                ' ' .
                                ($updatedValues['mi'] ?? '') .
                                ' ' .
                                ($updatedValues['last'] ?? '');
                        @endphp
                        <tr>
                            <td class="text-center">{{ $url_pin_number }}</td>
                            <td class="text-center">{{ ucwords(strtolower($full_name)) }}</td>
                            <td class="text-center">{{ ucwords(strtolower($updatedValues['mailing'] ?? '-')) }}</td>
                            <td class="text-center">{{ ucwords(strtolower($updatedValues['address_two'] ?? '-')) }}</td>
                            {{-- <td class="text-center">{{ ucwords(strtolower($address_two ?? '-')) }}</td> --}}
                            <td class="text-center">{{ ucwords(strtolower($updatedValues['city'] ?? '-')) }}</td>
                            <td class="text-center">{{ strtoupper($updatedValues['state'] ?? '-') }}</td>
                            <td class="text-center">{{ $updatedValues['zip'] ?? '-' }}</td>
                            <td class="text-center">{{ $email }}</td>
                            <td class="text-center">{{ $phone_number }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @else
            {{-- <p>No changes were made to the original record.</p> --}}
        @endif
        <!-- Original Record Section -->
        <h3>Tax Record:</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>URL Pin</th>
                        <th>Full Name</th>
                        <th>Address 01</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Postal Code / Zip Code</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $url_pin_number }}</td>
                        <td>{{ $record['first'] . ' ' . $record['mi'] . ' ' . $record['last'] }}</td>
                        <td>{{ $record['mailing'] }}</td>
                        <td>{{ $record['city'] }}</td>
                        <td>{{ $record['state'] }}</td>
                        <td>{{ $record['zip'] }}</td>
                        <td>{{ $email }}</td>
                        <td>{{ $phone_number }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3>Comments:</h3>
        <p>{{ $comments }}</p>

        <h3>Contact Medium:</h3>
        <ul>
            {{-- @foreach ($check_box as $value)
                <li>{{ ucfirst(str_replace('_', ' ', $value)) }}</li>
            @endforeach --}}

            @if (in_array('any', $check_box))
                <li>Any</li>
                <li>Postal Email</li>
                <li>Email</li>
                <li>Phone</li>
            @elseif (in_array('none', $check_box))
                <li>None</li>
            @elseif (!in_array('none', $check_box))
                @foreach ($check_box as $value)
                    <li>{{ ucfirst(str_replace('_', ' ', $value)) }}</li>
                @endforeach
            @endif
        </ul>
        <p style="margin-left: 12px;">Thank you for choosing 911TaxRelief.Law for tax registry facilitation. An expert
            tax consultant from our team will reach out to you within 24-48 hours. You can also call us at +1
            877-791-1829 between 11AM to 3PM Central Time.</p>
    </div>
</body>

</html>
