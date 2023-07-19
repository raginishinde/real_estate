<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Redirect;
use Session;

class CustomerChatController extends Controller
{
    public function chat(Request $request)
    {
        $list_users = DB::select("CALL list_user()");
        $list_groups = DB::select("CALL list_groups()");

        $userId=session()->get('userId');

        $chat_list_users = array();
        foreach ($list_users as $list_user) {
            $user = array();
            $user['id'] = $list_user->id;
            $user['userid'] = $userId;
            $user['type'] = "single";
            $user['name'] = $list_user->fname . " " . $list_user->lname;
            $user['members'] = "";
            $chat_list_users[] = $user;
        }

        $chat_list_groups = array();
        foreach ($list_groups as $list_group) {
            $group = array();
            $group['id'] = $list_group->id;
            $group['userid'] = $userId;
            $group['type'] = "group";
            $group['name'] = $list_group->grp_name;
            $group['members'] = $list_group->member_ids;
            $chat_list_groups[] = $group;
        }

        $chat_list = array_merge($chat_list_users, $chat_list_groups);
        //dd($chat_list);

        return view('user.chat', compact('chat_list'));
    }
    public function GetMessages(Request $request)
    {
        $id = $request->input('id');
        $type = $request->input('type');
        $get_id = $request->input('userid');
        // print_r($get_id);exit;
        $session_username = 'Admin';
        //$session_id = Session::get('id');
        //echo $session_id;exit;

        if ($type == 'single') {
            $user = DB::table('users')->where('id', $id)->first();
            $inbox = DB::table('messages')
                ->where('sent_to_id', $get_id) //senderid
                ->where('sender_id', $id); //sendtoid
            //->where('role','=','1');
            //->get();

            $sent = DB::table('messages')
                ->where('sender_id', $get_id) //senderid
                ->where('sent_to_id', $id) //sendtoid
            //->where('role','=','2')
                ->union($inbox)
                ->orderBy('id', 'asc')
                ->get();

            $msgdata = $sent;
            //$msgdata['image']=$img;
            $read = DB::table('messages')->where('sender_id', $id)->update(['is_read' => '1']);
            if ($msgdata) {
                $output = "";
                $output .= "<div class='topdiv'><h5>" . $session_username . "</h5></div>";
                foreach ($msgdata as $msgs) {
                    $current = date("d-m-Y");
                    $mdate = date('d-m-Y', strtotime($msgs->created_at));
                    if ($mdate == $current) {
                        $date = 'Today';
                        $time = date('g:i a', strtotime($msgs->created_at));
                    } else {
                        $date = $mdate;
                        $time = date('g:i a', strtotime($msgs->created_at));
                    }
                    $f = $user->fname;
                    $l = $user->lname;

                    if ($msgs->sender_id == $get_id) {
                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        } else {
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        }
                    } else {
                        // $output.= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><span style='color:#555d88;''>{$f[0]} {$l[0]}</span></div>  </div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";

                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><img src='{$img}' class='' id='wizardPicturePreview' title=''></div></div><div class='received_msg'><div class='received_withd_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        } else {
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''></div></div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        }

                    }

                }

                return response()->json($output);
            }
        } else {
            //for group start
            $group = DB::table('groups')->where('id', $id)->first();

            $inbox = DB::select("CALL get_group_messages(?)", array($id));

            // $inbox = DB::table('messages')
            //     ->where('sent_to_id', $get_id) //senderid
            //     ->where('sender_id', $id); //sendtoid
            //->where('role','=','1');
            //->get();

            // $sent = DB::table('messages')
            //     ->where('sender_id', $get_id) //senderid
            //     ->where('sent_to_id', $id) //sendtoid
            // //->where('role','=','2')
            //     ->union($inbox)
            //     ->orderBy('id', 'asc')
            //     ->get();
            $sent = DB::select("CALL get_group_messages(?)", array($id));

            $msgdata = $sent;
            //$msgdata['image']=$img;
            $read = DB::table('messages')->where('sender_id', $id)->update(['is_read' => '1']);
            if ($msgdata) {
                $output = "";
                $output .= "<div class='topdiv'><h5>" . $session_username . "</h5></div>";

                foreach ($msgdata as $msgs) {
                    $current = date("d-m-Y");
                    $mdate = date('d-m-Y', strtotime($msgs->created_at));

                    if ($mdate == $current) {
                        $date = 'Today';
                        $time = date('g:i a', strtotime($msgs->created_at));
                    } else {
                        $date = $mdate;
                        $time = date('g:i a', strtotime($msgs->created_at));
                    }
                    $f = $group->grp_name;
                    $l = "";

                    if ($msgs->sender_id == $get_id) {

                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        } else {
                            $output .= "<div class='outgoing_msg'><div class='sent_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span> </div></div>";
                        }
                    } else {
                        // $output.= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><span style='color:#555d88;''>{$f[0]} {$l[0]}</span></div>  </div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";

                        if (str_contains($msgs->body, 'http:') || str_contains($msgs->body, 'https:')) {
                            $name = basename($msgs->body);
                            $url = base64_encode($msgs->body);
                            $route = url(app()->getLocale() . '/file/' . $url . '/download');
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''><img src='{$img}' class='' id='wizardPicturePreview' title=''></div></div><div class='received_msg'><div class='received_withd_msg'><a href='{$route}'>{$name}</a><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        } else {
                            $output .= "<div class='incoming_msg'><div class='incoming_msg_img'><div style='border-radius: 50%;border: 1px solid #98a6ad;''></div></div><div class='received_msg'><div class='received_withd_msg'><p>{$msgs->body}</p><span class='time_date'> {$time}    |    {$date}</span></div></div></div>";
                        }

                    }

                }
                //dd($output);exit;
                return response()->json($output);
            }
            //for group end
        }

    }

    public function SendMessages(Request $request)
    {

        $text = $request->input('text');

        $sent_to_id = $request->input('id');
        $sender_id = $request->input('userid');
        $type = $request->input('type');
        $body = $text;

        $add_mssg = DB::select("CALL add_user_comment(?,?,?,?)", array($type, $sent_to_id, $sender_id, $body));
        return response()->json('success');
    }

    public function add_user_comment(Request $request)
    {
        $session_username = Session::get('username');
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);
        $id = $request->id;
        if ($validator->fails()) {
            return redirect('/admin/chat' . '/' . $id)
                ->withInput()
                ->withErrors($validator);
        } else {
            $id = $request->input('id');
            $comment = $request->input('comment');
            $username = $session_username;
            $assign_to = $request->input('assign_to');
            $ticket_id = $request->input('ticket_id');
            $update_user = DB::select("CALL add_user_comment(?,?,?,?)", array($comment, $username, $assign_to, $ticket_id));
        }
        return redirect('get_ticket')->with('status', ('Comment created successfully'));
    }
}
