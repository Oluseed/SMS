                        <form method="POST" action="{{ url('/teacher/timetable/'.$user->class_teacher.'/delete') }}" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button2" style="background:#9c0303ff;">Delete
                                <i class="far fa-trash-alt" aria-hidden="true"></i>
                            </button>
                        </form>
                        <form method="GET" action="{{ url('/teacher/timetable/'.$id.'/edit') }}" style="display:inline">
                            <button type="submit" class="button2" style="background:#9b850bff;">Edit
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </form>
                        