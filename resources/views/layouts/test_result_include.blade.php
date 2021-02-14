@foreach ($data as $row)
                        		<option value="{{ $row->name ?? 'null'}}">{{ $row->name ?? 'null'}}</option>
                                @endforeach