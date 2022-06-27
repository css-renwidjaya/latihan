import React, {useState} from 'react';
import {
  StyleSheet,
  TextInput,
  TouchableOpacity,
  View,
  Text,
} from 'react-native';

const Login = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const changeDataText = (str, type) => {
    console.log(type);
  };

  const handleLogin = () => {
    console.log('====================================');
    console.log(email);
    console.log('====================================');
  };

  return (
    <View style={styles.sectionContainer}>
      <View style={styles.boxLogin}>
        <TextInput
          placeholder={'Input your email'}
          keyboardType={'default'}
          style={styles.textInput}
          value={email}
          onChangeText={e => changeDataText(e, 'email')}
        />

        <TextInput
          placeholder={'Input your password'}
          secureTextEntry={true}
          style={styles.textInput}
          value={password}
          onChangeText={e => changeDataText(e, 'password')}
        />

        <TouchableOpacity
          style={styles.boxButton}
          onPress={() => handleLogin()}>
          <Text style={styles.textButton}>Submit</Text>
        </TouchableOpacity>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  sectionContainer: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
  },
  boxLogin: {
    fontSize: 24,
    fontWeight: '600',
    flexDirection: 'column',
    width: '80%',
  },
  textInput: {
    borderWidth: 1,
    borderRadius: 7,
    padding: 12,
    margin: 12,
  },
  boxButton: {
    alignItems: 'center',
    justifyContent: 'center',
    backgroundColor: '#3E92CC',
    padding: 12,
    borderRadius: 7,
    width: '40%',
    alignSelf: 'center',
    marginTop: 12,
  },
  textButton: {
    color: '#fff',
  },
});

export default Login;
